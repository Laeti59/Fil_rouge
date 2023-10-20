function scrollToForm(id) {
    document.getElementById('id').value = id;
    var element = document.getElementById('ancrage');
    element.scrollIntoView({ behavior: "smooth", block: "start", inline: "nearest" });
}
