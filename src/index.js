//Код слайдера - начало
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex +=n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
  document.getElementById("curentSlide").innerHTML = slideIndex;
}

function showSlides(n) { //
  let i;
  let slides = document.getElementsByClassName("mySlides");

  if (n > slides.length)  {
    slideIndex = 1
  }

  if (n < 1)  {
    slideIndex = slides.length
  }

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    
  }

  slides[slideIndex-1].style.display = "block";
  document.getElementById("curentSlide").innerHTML = slideIndex.toString();
}

//Код слайдера - конец


//Открыть меню nav в мобильной версии
function menu_open () { 
  document.getElementById("headerNav").style.display = "flex";
  document.getElementById("menu-to-open").style.display = "none";
  document.getElementById("menu-to-close").style.display = "flex";
}

//Закрыть меню nav в мобильной версии
function menu_close () { 
  document.getElementById("headerNav").style.display = "none";
  document.getElementById("menu-to-close").style.display = "none";
  document.getElementById("menu-to-open").style.display = "flex";
}

//Открыть feedback-form
function feedbackFormOpen() {
  document.getElementById("feedback-form").style.display = "flex";
}

//Закрыть feedback-form
function feedbackFormClose() {
  document.getElementById("feedback-form").style.display = "none";
}

//Отправить данные из формы
//Доделать - маску ввода, валидацию введённых значений, подвязать к отправке на тестовую почту
function sendFeedbackForm() {
  let name = document.getElementById("user_name").value;
  let phone = document.getElementById("user_phone").value;
  if (name !== "" && phone !== "") {
    return alert("Заглушка отправки формы на сервер или почту");
  } else {
    return alert ("Не введены данные в одно из полей")
  }
}

//Открыть authorInfo
function authorInfoOpen() {
  document.getElementById("author-info").style.display = "flex";
}

//Закрыть authorInfo
function authorInfoClose() {
  document.getElementById("author-info").style.display = "none";
}