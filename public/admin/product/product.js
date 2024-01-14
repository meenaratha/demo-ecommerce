/* submit button*/
document.addEventListener('DOMContentLoaded', function () {
    var saveButton = document.getElementById('product_save');
    saveButton.addEventListener('click', function () {
      // Toggle the classes when the button is clicked
      var labelSpan = document.querySelector('.indicator-label');
      var progressSpan = document.querySelector('.indicator-progress');

      labelSpan.style.display = 'none'; // Assuming 'd-none' is a class that hides an element
      progressSpan.style.display = 'block';


      // Set a timeout to hide the progress span after a certain time (e.g., 3000 milliseconds or 3 seconds)
      setTimeout(function () {
        progressSpan.style.display = 'none';
        labelSpan.style.display = 'block';
      }, 1000);
    });
  });



jQuery(document).ready(function () {
    ImgUpload();
  });

  function ImgUpload() {
    var imgWrap = "";
    var imgArray = [];

    $('.upload__inputfile').each(function () {
      $(this).on('change', function (e) {
        imgWrap = $(this).closest('.image-container').find('.upload__img-wrap');
        var maxLength = $(this).attr('data-max_length');

        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        var iterator = 0;
        filesArr.forEach(function (f, index) {

          if (!f.type.match('image.*')) {
            return;
          }

          if (imgArray.length > maxLength) {
            return false
          } else {
            var len = 0;
            for (var i = 0; i < imgArray.length; i++) {
              if (imgArray[i] !== undefined) {
                len++;
              }
            }
            if (len > maxLength) {
              return false;
            } else {
              imgArray.push(f);

              var reader = new FileReader();
              reader.onload = function (e) {
                var html = "<div class='upload__img'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                imgWrap.append(html);
                iterator++;
              }
              reader.readAsDataURL(f);
            }
          }
        });
      });
    });

    $('body').on('click', ".upload__img-close", function (e) {
      var file = $(this).parent().data("file");
      for (var i = 0; i < imgArray.length; i++) {
        if (imgArray[i].name === file) {
          imgArray.splice(i, 1);
          break;
        }
      }
      $(this).parent().parent().remove();
    });
  }



/* product image*/


// File Upload
//
function ekUpload() {
    function Init() {
      console.log("Upload Initialised");

      var fileSelect = document.getElementById("file-upload"),
        fileDrag = document.getElementById("file-drag"),
        submitButton = document.getElementById("submit-button");

      fileSelect.addEventListener("change", fileSelectHandler, false);

      // Is XHR2 available?
      var xhr = new XMLHttpRequest();
      if (xhr.upload) {
        // File Drop
        fileDrag.addEventListener("dragover", fileDragHover, false);
        fileDrag.addEventListener("dragleave", fileDragHover, false);
        fileDrag.addEventListener("drop", fileSelectHandler, false);
      }
    }

    function fileDragHover(e) {
      var fileDrag = document.getElementById("file-drag");

      e.stopPropagation();
      e.preventDefault();

      fileDrag.className =
        e.type === "dragover" ? "hover" : "modal-body file-upload";
    }

    function fileSelectHandler(e) {
      // Fetch FileList object
      var files = e.target.files || e.dataTransfer.files;

      // Cancel event and hover styling
      fileDragHover(e);

      // Process all File objects
      for (var i = 0, f; (f = files[i]); i++) {
        parseFile(f);
        uploadFile(f);
      }
    }

    // Output
    function output(msg) {
      // Response
      var m = document.getElementById("messages");
      m.innerHTML = msg;
    }

    function parseFile(file) {
      console.log(file.name);
      output("<strong>" + encodeURI(file.name) + "</strong>");

      // var fileType = file.type;
      // console.log(fileType);
      var imageName = file.name;

      var isGood = /\.(?=gif|jpg|png|jpeg)/gi.test(imageName);
      if (isGood) {
        document.getElementById("start").classList.add("hidden");
        document.getElementById("response").classList.remove("hidden");
        document.getElementById("notimage").classList.add("hidden");
        // Thumbnail Preview
        document.getElementById("file-image").classList.remove("hidden");
        document.getElementById("file-image").src = URL.createObjectURL(file);
      } else {
        document.getElementById("file-image").classList.add("hidden");
        document.getElementById("notimage").classList.remove("hidden");
        document.getElementById("start").classList.remove("hidden");
        document.getElementById("response").classList.add("hidden");
        document.getElementById("file-upload-form").reset();
      }
    }

    function setProgressMaxValue(e) {
      var pBar = document.getElementById("file-progress");

      if (e.lengthComputable) {
        pBar.max = e.total;
      }
    }

    function updateFileProgress(e) {
      var pBar = document.getElementById("file-progress");

      if (e.lengthComputable) {
        pBar.value = e.loaded;
      }
    }

    function uploadFile(file) {
      var xhr = new XMLHttpRequest(),
        fileInput = document.getElementById("class-roster-file"),
        pBar = document.getElementById("file-progress"),
        fileSizeLimit = 1024; // In MB
      if (xhr.upload) {
        // Check if file is less than x MB
        if (file.size <= fileSizeLimit * 1024 * 1024) {
          // Progress bar
          pBar.style.display = "inline";
          xhr.upload.addEventListener("loadstart", setProgressMaxValue, false);
          xhr.upload.addEventListener("progress", updateFileProgress, false);

          // File received / failed
          xhr.onreadystatechange = function (e) {
            if (xhr.readyState == 4) {
              // Everything is good!
              // progress.className = (xhr.status == 200 ? "success" : "failure");
              // document.location.reload(true);
            }
          };

          // Start upload
          xhr.open(
            "POST",
            document.getElementById("file-upload-form").action,
            true
          );
          xhr.setRequestHeader("X-File-Name", file.name);
          xhr.setRequestHeader("X-File-Size", file.size);
          xhr.setRequestHeader("Content-Type", "multipart/form-data");
          xhr.send(file);
        } else {
          output("Please upload a smaller file (< " + fileSizeLimit + " MB).");
        }
      }
    }

    // Check for the various File API support.
    if (window.File && window.FileList && window.FileReader) {
      Init();
    } else {
      document.getElementById("file-drag").style.display = "none";
    }
  }
  ekUpload();
