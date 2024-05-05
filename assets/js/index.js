const index = {
    init: function () {

        setTimeout(function() {
            $('#video iframe').attr('title', 'Video tiktok');
          }, 5000);
          

        this.copyToClipboard();
    },
    toastify: function (message, background) {
        Toastify({
            text: message,
            className: "info",
            duration: 1500,
            offset: {
                x: 50,
                y: 50
            },
            style: {
                background: background,
            }
        }).showToast();
    },
    copyToClipboard: function () {
        const copyLinks = document.querySelectorAll('.copy-clipboard');

        copyLinks.forEach(link => {
            link.addEventListener('click', () => {
                try {
                    const textToCopy = link.innerText;
                    const tempTextArea = document.createElement('textarea');
                    tempTextArea.value = textToCopy;
                    document.body.appendChild(tempTextArea);
                    tempTextArea.select();
                    document.execCommand('copy');
                    document.body.removeChild(tempTextArea);
                    let message = "Copiado con exito!";
                    let background = "background-color: #0077db";
                    this.toastify(message, background);
                } catch (error) {
                    let message = "Ha ocurrido un error copiando el texto.";
                    let background = "background-color: #ff3333b";
                    this.toastify(message, background);
                }
            });
        });
    }
};

index.init();
