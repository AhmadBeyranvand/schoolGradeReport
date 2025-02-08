import { DotLottie } from "@lottiefiles/dotlottie-web";

if(window.location.href == "/admin/semester/new" || window.location.href.includes("/admin/studentManager/grades/")){
  const dotLottie = new DotLottie({
    canvas:  document.querySelector("#lottie-book"),
    src: "/static/lotties/book_1.lottie",
    loop: true,
    autoplay: true
  });
}