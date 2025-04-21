<!-- Optional footer -->
<!-- <div class="footer text-center mt-5">
    <p>Visit us at: <a href="http://www.teachinengland.com" target="_blank">www.teachinengland.com</a></p>
</div> -->

<script>
    function toggleSubmit() {
        const termsCheckbox = document.getElementById('terms');
        const submitButton = document.getElementById('submit-btn');
        submitButton.disabled = !termsCheckbox.checked;
    }

    if (document.getElementById('success-message')) {
        setTimeout(function () {
            window.location.href = "{{ route('home') }}";
        }, 3000);
    }
</script>

</body>
</html>
