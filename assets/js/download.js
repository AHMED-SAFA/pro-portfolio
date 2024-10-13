document.getElementById("downloadCV").addEventListener("click", function () {
  const fileId = "1TdepXCxLkbyvRrDszbCV4XVMms1fJu6Q";
  const downloadLink = `https://drive.google.com/uc?export=download&id=${fileId}`;
  window.location.href = downloadLink;
});
