$(document).ready(function () {
    document.querySelectorAll('[data-masked]').forEach(node =>
        $(node).inputmask(node.getAttribute('data-masked'))
        );
})
