function fetchContent(el) {
  let view = el.getAttribute("a-view");
  let folder = el.getAttribute("a-folder");
  fetch(`subPages/${folder}/${view}.html`)
    .then((response) => {
      let html = response.text();
      return html;
    })
    .then((html) => {
      document.getElementById("ajax-content").innerHTML = html;
    });
}
