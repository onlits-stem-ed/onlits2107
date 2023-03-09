<x-layout>
    <h1>Resume (N)</h1>

    <form action="/new" method="post">
        @csrf
        <div class="container">
            <div class="mb-3 mt-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $resume['first_name'] }}">
            </div>
            <div class="mb-3 mt-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $resume['last_name'] }}">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $resume['email'] }}">
            </div>
            <div class="mb-3 mt-3">
                <label for="contact_no" class="form-label">Contact Number</label>
                <input type="text" name="contact_no" id="contact_no" class="form-control">
            </div>
            <div class="mb-3 mt-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" class="form-control">
            </div>
            <hr>
            <div class="mb-3 mt-3">
                <label for="address" class="form-label">Objective</label>
                <input type="text" name="address" id="address" class="form-control">
            </div>
            <div class="mb-3 mt-3">
                <label for="address" class="form-label">Professional Experience</label>
                <input type="text" name="address" id="address" class="form-control">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
        <br>
    </form>

</x-layout>