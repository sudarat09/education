 <script>
             const app = new Vue({
                 el: '#app',
                 data: {
                     img: null,
                     img_type: null,
                     action: null,
                 },
                 mounted() {
                     // this.downloadFile();
                 },
                 methods: {

                     downloadFile(fileNameDownload) {
                         const url_dowload = `./uploads/${fileNameDownload}`;
                         // console.log('url_dowload', url_dowload);
                         axios({
                             url: url_dowload,
                             method: 'GET',
                             responseType: 'blob',
                         }).then((res) => {

                             const {
                                 type
                             } = res.data;
                             const fileName = this.createNewFile(type)

                             let fileURL = window.URL.createObjectURL(new Blob([res.data]));
                             let fileLink = document.createElement('a');

                             fileLink.href = fileURL;
                             fileLink.setAttribute('download', fileName);
                             document.body.appendChild(fileLink);

                             fileLink.click();
                         });
                     },

                     actionFunc(payload) {
                         this.action = payload
                     },

                     uploadImage() {
                         const payload = {
                             action: this.action,
                             img: this.img,
                             img_type: this.img_type
                         }
                         console.log('payload', payload);
                         axios.post('./insert_FileA.php', payload).then(res => {
                                 console.log('res', res.data)
                                 location = './operat.php'
                             })
                             .catch(error => console.error(error))
                     },
                     convertImagesBase64(e) {
                         let reader = new FileReader();
                         const fileType = this.checkImageTypeUpload(e);
                         this.img_type = fileType;

                         if (fileType !== null) {
                             reader.onload = (e) => {
                                 this.img = e.target.result;
                             };
                             reader.readAsDataURL(e.target.files[0]);
                         } else {
                             this.img = null
                             this.img_type = null
                             Swal.fire({
                                 icon: 'error',
                                 title: 'ไฟล์ที่ Upload',
                                 text: 'กรุณา Upload ไฟล์รูปภาพที่เป็นนามสกุลไฟล์ .jpeg , .jpg , .png!',
                             });
                         }
                     },

                     createNewFile(imageType) {
                         let fileName = '';
                         switch (imageType) {
                             case 'image/jpg':
                                 fileName = `dowload-file-${Date.now()}.jpg`;
                                 return fileName
                                 break;
                             case 'image/jpeg':
                                 fileName = `dowload-file-${Date.now()}.jpeg`;
                                 return fileName
                                 break;
                             case 'image/png':
                                 fileName = `dowload-file-${Date.now()}.png`;
                                 return fileName
                                 break;
                             case 'application/pdf':
                                 fileName = `dowload-file-${Date.now()}.pdf`;
                                 return fileName
                                 break;
                             case 'application/msword':
                                 fileName = `dowload-file-${Date.now()}.doc`;
                                 return fileName
                                 break;
                             case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                                 fileName = `dowload-file-${Date.now()}.doc`;
                                 return fileName
                             default:
                                 return fileName;
                         }
                     },

                     checkImageTypeUpload(e) {
                         let imageType = e.target.files[0].type;
                         switch (imageType) {
                             case 'image/jpg':
                                 return "jpg";
                                 break;
                             case 'image/jpeg':
                                 return "jpeg";
                                 break;
                             case 'image/png':
                                 return "png";
                                 break;
                             case 'application/pdf':
                                 return "pdf";
                                 break;
                             case 'application/msword':
                                 return "doc";
                                 break;
                             case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                                 return "doc";
                             default:
                                 return null;
                         }
                     },
                     checkFileTypeUpload(e) {
                         let imageType = e.target.files[0].type;
                         switch (imageType) {
                             case 'image/jpg':
                                 return "jpg";
                                 break;
                             case 'image/jpeg':
                                 return "jpeg";
                                 break;
                             case 'image/png':
                                 return "png";
                                 break;
                             case 'application/pdf':
                                 return "pdf";
                                 break;
                             case 'application/msword':
                                 return "doc";
                                 break;
                             case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                                 return "doc";
                                 break;
                             default:
                                 return null;
                         }
                     },
                 },
             })
             </script>