import { DotLottie } from "@lottiefiles/dotlottie-web";

const dotLottie = new DotLottie({
    canvas:  document.querySelector("#lottie-book"),
    src: "/static/lotties/book_1.lottie",
    loop: true,
    autoplay: true
  });