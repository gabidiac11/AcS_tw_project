<<<<<<< HEAD
function addFile() {
  const file = document.getElementById("input-upload").files[0];
  const formData = new FormData();
  formData.append("file", file);

  fetch(`${window.BASE_URL}/import/csv`, {
    method: "POST",
    headers: new Headers(),
    body: formdata
  })
    .then((succes) => console.log(succes))
    .catch((error) => console.log(error));
}
=======
function addFile() {}
>>>>>>> 4a7259eb9a5284c11d66a2d199b8f92a3069fb45

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
<<<<<<< HEAD

    reader.onload = function (e) {
      $(".image-upload-wrap").hide();//queryslector('.file-bla').style.display = 'none';

      $(".file-upload-image").attr("src", e.target.result); //queryslector('.file-bla').setAttribute('src', e.target.result);
      $(".file-upload-content").show(); //queryslector('.file-bla').style.display = '';

      $(".image-title").html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);
  } else {
    removeUpload();
  }

}

function removeUpload() {
  $(".file-upload-input").replaceWith($(".file-upload-input").clone());
  $(".file-upload-content").hide();
  $(".image-upload-wrap").show();
}
$(".image-upload-wrap").bind("dragover", function () {
  $(".image-upload-wrap").addClass("image-dropping");
});
$(".image-upload-wrap").bind("dragleave", function () {
  $(".image-upload-wrap").removeClass("image-dropping");
});
=======

    reader.onload = function (e) {
      document.querySelector(".image-upload-wrap").style.display = "none";

      document
        .querySelector(".file-upload-image")
        .setAttribute("src", e.target.result);
      document.querySelector(".file-upload-content").style.display = "";

      document.querySelector(".image-title").innerHTML = input.files[0].name;
    };

    reader.readAsDataURL(input.files[0]);
  } else {
    removeUpload();
  }
}

function removeUpload() {
  // $('.file-upload-input').replaceWith($('.file-upload-input').clone());

  const docNode = document.querySelector(".file-upload-input");
  docNode.parentNode.replaceChild(docNode.cloneNode(), docNode);

  document.querySelector(".file-upload-content").style.display = "none";
  document.querySelector(".image-upload-wrap").style.display = "";
}

(() => {
  const eventHandler = () => {
    document
      .querySelector(".image-upload-wrap")
      .addEventListener("dragover", function () {
        document
          .querySelector(".image-upload-wrap")
          .classList.add("image-dropping");
      });
      
    document.querySelector(".image-upload-wrap").addEventListener("dragleave", function () {
      document
        .querySelector(".image-upload-wrap")
        .classList.remove("image-dropping");
    });
  };
  if (document.readyState !== "loading") {
    eventHandler();
  } else {
    document.addEventListener("DOMContentLoaded", eventHandler);
  }
})();
>>>>>>> 4a7259eb9a5284c11d66a2d199b8f92a3069fb45
