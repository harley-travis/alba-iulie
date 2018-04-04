    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/vue-material@beta"></script>
    <script>
      Vue.use(VueMaterial.default)

      new Vue({
        el: '#app'
      })
    </script>

    <!-- register WYSIWYG editors -->
    <script>
      // jobs
      CKEDITOR.replace( 'description' );
      CKEDITOR.replace( 'work' );
      CKEDITOR.replace( 'qualifications' );
      CKEDITOR.replace( 'skills' );
    </script>
    
    </body>
</html>