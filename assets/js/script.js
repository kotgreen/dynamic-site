// Файл: ../../assets/js/script.js

// Функция для инициализации TinyMCE
function initTinyMCE() {
    // Проверяем, загружен ли TinyMCE и существует ли элемент
    if (typeof tinymce !== 'undefined' && document.querySelector('#summernote')) {
        console.log('Инициализация TinyMCE...');
        
        tinymce.init({
            selector: '#summernote', // ID вашего textarea
            height: 260,
            width: '100%',
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | blocks | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            menubar: false,
            statusbar: false,
            // Автоматическое обновление значения в textarea при отправке формы
            setup: function (editor) {
                editor.on('change', function () {
                    tinymce.triggerSave();
                });
            }
        });
        
        console.log('TinyMCE инициализирован');
    } else {
        console.log('TinyMCE еще не загружен или элемент не найден');
    }
}

// Пытаемся инициализировать после загрузки DOM
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initTinyMCE);
} else {
    initTinyMCE();
}

console.log('Script.js загружен');