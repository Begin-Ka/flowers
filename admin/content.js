const textArea = document.querySelector('#mytextarea');

document.querySelector('.button').addEventListener('click', function(){
    let d = tinymce.get('mytextarea').getContent();

    console.log(d);

});

// редактирование таблицы

let table = document.getElementsByTagName('table')[0];

let row;

function addRow() {
  row = document.createElement('tr');
  table.appendChild(row);
}

function addCol() {
  if (!row) {
    return row;
  }
  let col = document.createElement('td');
  col.innerHTML = 'Column';
  row.appendChild(col);
}

// Получаем текст из input

document.querySelector('.button').onclick = myClick;

function myClick (){
  let a = document.querySelector(".title").value;
}
// текстовый редактор
tinymce.init({
  selector:'#mytextarea',         
  
  plugins: [
  'advlist autolink link image lists charmap print preview hr anchor pagebreak',
  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
  'table emoticons template paste help'
],
toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
  'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
  'forecolor backcolor emoticons | help',
menu: {
  favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
},
menubar: 'favs file edit view insert format tools table help',

//content_css: 'css/content.css'
});