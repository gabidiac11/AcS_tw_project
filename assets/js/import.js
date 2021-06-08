function addFile(button) {
  button.disabled= true;
  const file = document.getElementById("input-upload").files[0];
  const formData = new FormData();
  formData.append("myFile", file);

  fetch(`${window.BASE_URL}/import/csv`, {
    method: "POST",
    headers: new Headers(),
    body: formData
  })
    .then((succes) => console.log(succes))
    .catch((error) => console.log(error)).finally(() => {
      button.disabled= false;
    })
}

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      document.querySelector(".image-upload-wrap").style.display = "none";

    
      document.querySelector(".file-upload-content").style.display = "flex";

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
