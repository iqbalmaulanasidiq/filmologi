<!-- Tombol Go to Top -->
<button id="goToTopBtn" class="fixed bottom-8 right-8 bg-blue-900 hover:bg-blue-600 text-white px-4 py-2 rounded-full hidden">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
    </svg>
</button>

<script>
     $(document).ready(function () {
        // Memunculkan/menyembunyikan tombol saat melakukan scroll
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#goToTopBtn').fadeIn();
            } else {
                $('#goToTopBtn').fadeOut();
            }
        });

        // Menggulir halaman ke atas saat tombol diklik
        $('#goToTopBtn').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 'slow');
            return false;
        });
    });
</script>