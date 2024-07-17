document.getElementById("downloadCV").addEventListener("click", function () {
  const fileId = "1PAfQKTp0gx9ZZTdY0kaMZC9c4KhkXZrV";
  const downloadLink = `https://drive.google.com/uc?export=download&id=${fileId}`;
  window.location.href = downloadLink;
});
