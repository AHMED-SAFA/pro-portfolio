document.addEventListener("DOMContentLoaded", (event) => {
  let visitorCount = localStorage.getItem("visitorCount");

  if (!visitorCount) {
    visitorCount = 0;
  } else {
    visitorCount = parseInt(visitorCount);
  }

  visitorCount += 1;
  localStorage.setItem("visitorCount", visitorCount);

  document.getElementById("visitor-count").innerText = visitorCount;
  // localStorage.removeItem("visitorCount");
});
