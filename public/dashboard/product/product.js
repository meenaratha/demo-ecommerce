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
