import { DotLottie } from "@lottiefiles/dotlottie-web";

if(window.location.href.includes("/admin/semester/new") || window.location.href.includes("/admin/studentManager/grades/")){
  const dotLottie = new DotLottie({
    canvas:  document.querySelector("#lottie-book"),
    src: "/static/lotties/book_1.lottie",
    loop: true,
    autoplay: true
  });
}
if(document.getElementById("lottie_dashboard")){
  const dotLottie = new DotLottie({
    canvas:  document.querySelector("#lottie_dashboard"),
    src: "/static/lotties/school2.lottie",
    loop: true,
    autoplay: true
  });
}
if(document.getElementById("lottie_student")){
  const dotLottie = new DotLottie({
    canvas:  document.querySelector("#lottie_student"),
    src: "/static/lotties/school1.lottie",
    loop: true,
    autoplay: true
  });
}