<!-- resources/views/register_form.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$request}}</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">{{$request}}</h2>
        <form action="{{ route('register.store') }}" method="POST">
            @csrf

            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>

            <!-- WhatsApp Number -->
            <div class="mb-3">
                <label for="whatsapp_number" class="form-label">WhatsApp Number</label>
                <input type="text" name="whatsapp_number" class="form-control" id="whatsapp_number" maxlength="15" required>
            </div>

            <!-- Alternate Number -->
            <div class="mb-3">
                <label for="alternate_number" class="form-label">Alternate Number</label>
                <input type="text" name="alternate_number" class="form-control" id="alternate_number" maxlength="15">
            </div>

            <!-- Location -->
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <select name="location" id="location" class="form-select" required>
                    <option value="">Select Blood Group</option>
                    @foreach($citis as $key => $blood)
                    <option value="{{ $key }}">{{ $blood }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Blood Group -->
            <div class="mb-3">
                <label for="blood_group" class="form-label">Blood Group</label>
                <select name="blood_group" id="blood_group" class="form-select" required>
                    <option value="">Select Blood Group</option>
                    @foreach($bloodgroups as $key => $blood)
                    <option value="{{ $key }}">{{ $blood }}</option>
                    @endforeach

                </select>
            </div>

            <!-- Type -->
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="number" value={{$type}} name="type" class="form-control" id="type" required readonly  style="background-color: #e9ecef;">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Add Bootstrap JS (optional) -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>