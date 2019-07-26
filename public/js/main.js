$(document).ready(function(){
  $('.card.bg-dark').each((i, e) => {
    e.style = `animation : card-in ${i * 100}ms ease-in-out forwards; animation-delay : ${i * 250}ms`
  })
});