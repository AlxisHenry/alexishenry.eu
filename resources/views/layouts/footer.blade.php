<footer class="__footer__">

      <div class="__footer__settings__">
            <a href="/login">
                  <i class="fa-solid fa-gear"></i>
            </a>
      </div>

      <div class="__footer__main__">
            © {{ date("Y") }} Alexis Henry. All Rights Reserved
      </div>

</footer>

@include('components.to-top-arrow')

<script src="{{ url('js/app.js') }}"></script>

@yield('footer')

</body>

</html>
