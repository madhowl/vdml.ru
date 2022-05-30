ClassicEditor
    .create( document.querySelector( 'textarea' ))
    .then( editor => {
        window.editor = editor;
    } )
    .catch( err => {console.error( err.stack );} );
