<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body.light-mode {
            background-color: #f8f9fa;
            color: #000;
        }
        body.dark-mode {
            background-color: #121212;
            color: #fff;
        }
        .card.light-mode {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card.dark-mode {
            background-color: #1e1e1e;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.7);
        }
        .card-header.light-mode {
            background-color: #198754;
            color: white;
        }
        .card-header.dark-mode {
            background-color: #198754;
            color: white;
        }
        .form-label.light-mode {
            color: #000;
        }
        .form-label.dark-mode {
            color: #fff;
        }
        .form-label .text-danger {
            font-size: 0.75rem;
        }
        .input-group-text.light-mode {
            background-color: #198754;
            color: white;
            border: none;
        }
        .input-group-text.dark-mode {
            background-color: #198754;
            color: white;
            border: none;
        }
        .form-control.light-mode {
            background-color: #fff;
            color: #000;
        }
        .form-control.dark-mode {
            background-color: #2c2c2c;
            color: #fff;
        }
        .form-control.light-mode:focus {
            border-color: #198754;
            box-shadow: 0 0 5px rgba(25, 135, 84, 0.5);
        }
        .form-control.dark-mode:focus {
            border-color: #198754;
            box-shadow: 0 0 5px rgba(25, 135, 84, 0.5);
        }
        .breadcrumb-item.light-mode {
            color: #000;
        }
        .breadcrumb-item.dark-mode {
            color: #fff;
        }
        .btn-success {
            background-color: #198754;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-success:hover {
            background-color: #145e38;
        }
        .btn-outline-secondary {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .btn-outline-secondary:hover {
            background-color: #6c757d;
            color: white;
        }
        .form-control {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
    </style>
</head>
<body class="light-mode">
<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active light-mode" aria-current="page">Resource</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-end mb-3">
        <button id="toggleMode" class="btn btn-outline-secondary"><i class="fas fa-moon"></i> Dark Mode</button>
    </div>
    <div class="card light-mode" id="card">
        <div class="card-header light-mode">
            <h1 class="card-title"><i class="fas fa-book"></i> Resource</h1>
        </div>
        <div class="card-body">
            <form method="post"> @csrf
                <div class="mb-3">
                    <label for="resourceName" class="form-label light-mode">Resource Name <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text light-mode" id="resourceNameAddon"><i class="fas fa-tag"></i></span>
                        <input type="text" class="form-control light-mode" id="resourceName" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName" class="form-label light-mode">First Name</label>
                        <div class="input-group">
                            <span class="input-group-text light-mode" id="firstNameAddon"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control light-mode" id="firstName">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label light-mode">Last Name</label>
                        <div class="input-group">
                            <span class="input-group-text light-mode" id="lastNameAddon"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control light-mode" id="lastName">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label light-mode">Email</label>
                        <div class="input-group">
                            <span class="input-group-text light-mode" id="emailAddon"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control light-mode" id="email">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="contactPhone" class="form-label light-mode">Contact Phone</label>
                        <div class="input-group">
                            <span class="input-group-text light-mode" id="contactPhoneAddon"><i class="fas fa-phone"></i></span>
                            <input type="tel" class="form-control light-mode" id="contactPhone">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="contactExt" class="form-label light-mode">Contact Ext</label>
                        <div class="input-group">
                            <span class="input-group-text light-mode" id="contactExtAddon"><i class="fas fa-phone-alt"></i></span>
                            <input type="text" class="form-control light-mode" id="contactExt">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="type" class="form-label light-mode">Type</label>
                        <div class="input-group">
                            <span class="input-group-text light-mode" id="typeAddon"><i class="fas fa-list"></i></span>
                            <input type="text" class="form-control light-mode" id="type">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="website" class="form-label light-mode">Website</label>
                    <div class="input-group">
                        <span class="input-group-text light-mode" id="websiteAddon"><i class="fas fa-globe"></i></span>
                        <input type="url" class="form-control light-mode" id="website">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label light-mode">Address</label>
                    <div class="input-group">
                        <span class="input-group-text light-mode" id="addressAddon"><i class="fas fa-map-marker-alt"></i></span>
                        <input type="text" class="form-control light-mode" id="address">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="city" class="form-label light-mode">City</label>
                        <div class="input-group">
                            <span class="input-group-text light-mode" id="cityAddon"><i class="fas fa-city"></i></span>
                            <input type="text" class="form-control light-mode" id="city">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="zip" class="form-label light-mode">Zip</label>
                        <div class="input-group">
                            <span class="input-group-text light-mode" id="zipAddon"><i class="fas fa-mail-bulk"></i></span>
                            <input type="text" class="form-control light-mode" id="zip">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="notes" class="form-label light-mode">Notes</label>
                    <textarea class="form-control light-mode" id="notes" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="lastUpdatedBy" class="form-label light-mode">Last Updated By</label>
                    <div class="input-group">
                        <span class="input-group-text light-mode" id="lastUpdatedByAddon"><i class="fas fa-user-edit"></i></span>
                        <input type="text" class="form-control light-mode" id="lastUpdatedBy">
                    </div>
                </div>
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script>
    const toggleModeButton = document.getElementById('toggleMode');
    const body = document.body;
    const card = document.getElementById('card');
    const inputGroups = document.querySelectorAll('.input-group-text');
    const formControls = document.querySelectorAll('.form-control');
    const formLabels = document.querySelectorAll('.form-label');
    const breadcrumbItems = document.querySelectorAll('.breadcrumb-item');

    toggleModeButton.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
        body.classList.toggle('light-mode');
        card.classList.toggle('dark-mode');
        card.classList.toggle('light-mode');
        inputGroups.forEach(inputGroup => {
            inputGroup.classList.toggle('dark-mode');
            inputGroup.classList.toggle('light-mode');
        });
        formControls.forEach(formControl => {
            formControl.classList.toggle('dark-mode');
            formControl.classList.toggle('light-mode');
        });
        formLabels.forEach(formLabel => {
            formLabel.classList.toggle('dark-mode');
            formLabel.classList.toggle('light-mode');
        });
        breadcrumbItems.forEach(breadcrumbItem => {
            breadcrumbItem.classList.toggle('dark-mode');
            breadcrumbItem.classList.toggle('light-mode');
        });

        if (body.classList.contains('dark-mode')) {
            toggleModeButton.innerHTML = '<i class="fas fa-sun"></i> Light Mode';
        } else {
            toggleModeButton.innerHTML = '<i class="fas fa-moon"></i> Dark Mode';
        }
    });
</script>
</body>
</html>
