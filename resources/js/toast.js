import Toastify from 'toastify-js'

const toasts = document.querySelectorAll(".toast")

if (toasts && toasts.length > 0){
    toasts.forEach(t=>{
        Toastify({
            text: t.innerHTML,
            duration: 3000,
            // destination: "https://github.com/apvarun/toastify-js",
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                // background: "linear-gradient(125deg,rgb(176, 0, 18),rgb(201, 61, 75))",
            },
            onClick: function () { } // Callback after click
        }).showToast();
    })
}