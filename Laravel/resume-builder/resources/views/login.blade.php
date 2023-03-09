<x-layout>
    <h1>Login</h1>
    <form action="/login" method="post">
        @csrf
        <div class="container">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <!-- <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div> -->
            <button type="submit" class="btn btn-dark">Login</button>
            <button type="button" id="already_registered" class="btn btn-dark">Sign up</button>
        </div>
    </form>
    <br>
    <script>
        alreadyRegistered = document.getElementById('already_registered');
        alreadyRegistered.onclick = function() {
            window.location.href = "/register";
        }
    </script>
</x-layout>