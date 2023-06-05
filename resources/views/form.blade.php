{{-- <input type="file" id="fileInput">
<button type="button" onclick="uploadFileToDrive()">Upload</button> --}}



<div class="hp-form" id="at-form">
    @csrf
    <div class="hp-form-group hp-filemargin" id="file-upload">
        <label class="hp-uploadfile" for="file">
            <input type="file" class="fileinput" id="file" name="file" onchange="handleFileSelect(event)" multiple/>
            <img src="./images/file-icon.svg" alt="icon" class="hp-fileicon" />
            <div class="hp-uploadcontent">
                <h3>{{__('form_heading')}}</h3>
                <span>{{__('file_input')}}</span>
            </div>
        </label>
    </div>
    <div class="hp-form-group hp-inputbg">
        <input type="text" class="hp-form-control" placeholder={{__('name')}} id="name" name="name">
        <label class="hp-placeholdertext" for="name">{{__('name')}}<em>*</em></label>
    </div>
    <div class="hp-form-group hp-inputbg">
        <input type="text" class="hp-form-control" placeholder={{__('email')}} id="email" name="email">
        <label class="hp-placeholdertext" for="email">{{__('email')}}<em>*</em></label>
    </div>
    <div class="hp-form-group hp-inputbg">
        <input type="text" class="hp-form-control" placeholder={{__('phone')}} id="phone" name="phone">
        <label class="hp-placeholdertext" for="phone">{{__('phone')}} <em>*</em></label>
    </div>
    <div class="hp-form-group hp-textareabg">
        <textarea class="hp-form-control" placeholder={{__('message')}} id="message" name="message"></textarea>
        <label class="hp-placeholdertext" for="message">{{__('message')}}</label>
    </div>
    <div class="hp-form-group">
      <span style="display:none" id="filename"></span>
  </div>
   
    <div class="hp-form-group">
        {{-- <button class="hp-btn" onclick="uploadFile()" style="cursor: pointer"> --}}
        <button class="hp-btn" type="submit" onclick="uploadFileMain()" style="cursor: pointer">
            {{__('submit_button')}}
        </button>
    </div>
</div>




<script src="https://apis.google.com/js/api.js"></script>
  <script>
  var file={};
  var files_all=[];
  var extensions=[];
 // Client ID and API key from the Developer Console
     var CLIENT_ID = '717784290448-hi4ir9qstcrov2a5i15e789ncq3st521.apps.googleusercontent.com';
    var API_KEY = 'AIzaSyCkdgbx7SdB52HApJFFlpaePnM1A4ZHAzo';

    // Array of API discovery doc URLs for APIs used by the quickstart
    var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/drive/v3/rest"];

    // Authorization scopes required by the API; multiple scopes can be
    // included, separated by spaces.
    var SCOPES = 'https://www.googleapis.com/auth/drive.file';

    var fileInput = document.getElementById('file');
    var status = document.getElementById('status');
    var url = document.getElementById('url');

    

    /**
     * Uploads a file to Google Drive and retrieves its URL.
     */
     function uploadFileToDrive() {
        google.accounts.id.initialize({
          client_id: '717784290448-hi4ir9qstcrov2a5i15e789ncq3st521.apps.googleusercontent.com',
          callback: handleCredentialResponse
        });

        function handleCredentialResponse(response) {
          if (response.credential) {
            uploadFile(response.credential);
          } else {
            google.accounts.id.prompt();
          }
        }

        function uploadFile(credential) {
          var file = document.getElementById('file').files[0];
          alert(file)
          var metadata = {
            'name': file.name,
            'mimeType': file.type
          };
          var accessToken = credential.accessToken;
          var form = new FormData();
          form.append('metadata', new Blob([JSON.stringify(metadata)], { type: 'application/json' }));
          form.append('file', file);

          axios.post('https://www.googleapis.com/upload/drive/v3/files?uploadType=multipart', form, {
            headers: {
              'Authorization': 'Bearer ' + accessToken,
              'Content-Type': 'multipart/related; boundary=foo_bar_baz'
            },
            onUploadProgress: function(progressEvent) {
              var percentCompleted = Math.round((progressEvent.loaded * 100) / progressEvent.total);
              console.log(percentCompleted);
            }
          }).then(function(response) {
            console.log(response.data);
            console.log('File ID:', response.data.id);
            var fileUrl = 'https://drive.google.com/file/d/' + response.data.id + '/view?usp=sharing';
            console.log('File URL:', fileUrl);
          }).catch(function(error) {
            console.error(error);
          });
        }
      }
    function uploadFileMain()
    {
   
        var name=document.getElementById("name").value;
        var email=document.getElementById("email").value;
        var phone=document.getElementById("phone").value;
        var message=document.getElementById("message").value;
        

        axios.post("/upload_file",{
    'name':name,
    'email':email,
    'phone':phone,
    'message':message,
    'file':file,
    'files':files_all,
    'extensions':extensions,
})
.then(response => {
    console.log(response)
    alert('done')
})
.catch(() => {
    alert('error')
    error => console.log(error);
});


    }

    function handleFileSelect(event) {
      const files = event.target.files || event.dataTransfer.files;
      var total_files = files.length;
      var text = document.getElementById("filename");
      if (total_files > 1) {
        text.innerHTML = total_files + ' files selected';
      } else {
        text.innerHTML = files[0].name;
      }
      text.style.display = 'block';


      for (var i = 0; i < total_files; i++) {
        (function(index) { // Use a closure to capture the current value of i
          var fileReader = new FileReader();
          fileReader.readAsDataURL(files[index]);

          fileReader.onload = function(e) {
            files_all[index] = e.target.result;
            var filename = files[index].name;
            extensions[index] = filename.split('.').pop();
          }
        })(i); // Call the closure function immediately with the current value of i
      }

      
    }

    const fileUpload = document.getElementById('at-form');

    fileUpload.addEventListener('dragover', function(event) {
      event.preventDefault();
      event.stopPropagation();
      fileUpload.classList.add('dragover');
    });

    fileUpload.addEventListener('dragleave', function(event) {
      event.preventDefault();
      event.stopPropagation();
      fileUpload.classList.remove('dragover');
    });

    fileUpload.addEventListener('drop', function(event) {
      event.preventDefault();
      event.stopPropagation();
      fileUpload.classList.remove('dragover');
      handleFileSelect(event);
    });
</script> 
