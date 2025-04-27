<div class="fixed-plugin">
    <div class="card shadow-lg ">
        <div class="card-header pb-0 pt-3 ">
            <div class="float-start">
                <h5 class="mt-3 mb-0">Corporate UI Configurator</h5>
                <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0">
            <!-- Sidebar Backgrounds -->
            <div>
                <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
                <div class="badge-colors my-2 text-start">
                    <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-3">
                <h6 class="mb-0">Sidenav Type</h6>
                <p class="text-sm">Choose between 2 different sidenav types.</p>
            </div>
            <div class="d-flex">
                <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-slate-900" onclick="sidebarType(this)">Dark</button>
                <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
            </div>
            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="../../panel-asset/js/core/popper.min.js"></script>
<script src="../../panel-asset/js/core/bootstrap.min.js"></script>
<script src="../../panel-asset/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../../panel-asset/js/plugins/smooth-scrollbar.min.js"></script>
<script src="../../panel-asset/js/plugins/chartjs.min.js"></script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../../panel-asset/js/argon-dashboard.min.js?v=2.0.4"></script>

<script src='https://unpkg.com/jquery@3/dist/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js'></script>
<script src='https://fengyuanchen.github.io/cropperjs/js/cropper.js'></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    let cropper;
    document.getElementById('imageInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('image').src = e.target.result;
                $('#cropModal').modal('show');
            };
            reader.readAsDataURL(file);
        }
    });

    $('#cropModal').on('shown.bs.modal', function() {
        cropper = new Cropper(document.getElementById('image'), {
            aspectRatio: 1,
            viewMode: 1,
            autoCropArea: 1,
            background: false
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
        document.getElementById('imageInput').value = '';
    });

    document.getElementById('cropButton').addEventListener('click', function() {
        const originalWidth = cropper.getImageData().naturalWidth;
        const originalHeight = cropper.getImageData().naturalHeight;
        const croppedData = cropper.getData();

        const cropWidth = Math.min(originalWidth, croppedData.width);
        const cropHeight = Math.min(originalHeight, croppedData.height);

        const croppedCanvas = cropper.getCroppedCanvas({
            width: cropWidth,
            height: cropHeight
        });
        croppedCanvas.toBlob(blob => {
            if (blob.size > 5 * 1024 * 1024) {
                alert('Image size exceeds 5MB. Please crop a smaller area.');
                return;
            }
            const formData = new FormData();
            formData.append('image_url', blob, 'cropped.jpg');
            document.getElementById('loading').style.display = 'block';
            document.getElementById('cropButton').style.display = 'none';
            fetch('../../Controllers/admin/uploadImageController', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    location.reload();
                    $('#cropModal').modal('hide');
                    document.getElementById('loading').style.display = 'none';
                    document.getElementById('cropButton').style.display = 'block';
                })
                .catch(error => {
                    alert(data);
                    document.getElementById('loading').style.display = 'none';
                    document.getElementById('cropButton').style.display = 'block';
                });
        }, 'image/jpeg', 0.9);
    });

    function searchInvestment(form) {
        const url = form.action;
        const key = form.search.value;

        if (key != "") {
            axios.get(url + "?investment=" + key)
                .then((response) => {
                    document.getElementById("investment").innerHTML = response.data;
                })
                .catch((error) => console.log("Error: " + error));
        } else {
            document.location.href = "accounting#investment";
            document.location.reload();
        }
    }

    function searchTransaction(form) {
        const url = form.action;
        const key = form.search.value;

        if (key != "") {
            axios.get(url + "?transaction=" + key)
                .then((response) => {
                    document.getElementById("transaction").innerHTML = response.data;
                })
                .catch((error) => console.log("Error: " + error));
        } else {
            document.location.href = "accounting#transaction";
            document.location.reload();
        }
    }

    function searchMember(form) {
        const url = form.action;
        const key = form.search.value;

        if (key != "") {
            axios.get(url + "?member=" + key)
                .then((response) => {
                    document.getElementById("member").innerHTML = response.data;
                })
                .catch((error) => console.log("Error: " + error));
        } else {
            document.location.href = "dashboard#member";
            document.location.reload();
        }
    }

    function oldPass(pass) {
        if (pass == "") {
            document.getElementById("old-pass").innerHTML = "";
            return;
        } else {
            axios.post("../../Controllers/admin/checkPasswordController", `pass=${pass}`, {
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                })
                .then((response) => {
                    document.getElementById("old-pass").innerHTML = response.data;
                })
                .catch((error) => console.log("Error: " + error));
        }
    }

    function newPass(pass) {
        let newPass = document.getElementById("new-pass");
        let conPass = document.getElementById("con-pass");

        let passError = document.getElementById("con-pass-error");

        if (conPass.value == "" || pass == "")
            passError.innerHTML = "";
        else if (conPass.value != "" && pass != "" && pass == conPass.value) {
            passError.innerHTML = "<i class='fas fa-check'></i> Matched";
            passError.classList = "text-sm font-weight-bold text-success";
        } else if (conPass.value != "" || pass != conPass.value) {
            passError.innerHTML = "<i class='fas fa-times'></i> Wrong";
            passError.classList = "text-sm font-weight-bold text-danger";
        }
    }

    function confirmPass(pass) {
        let newPass = document.getElementById("new-pass");
        let conPass = document.getElementById("con-pass");

        let passError = document.getElementById("con-pass-error");

        if (newPass.value == "" || pass == "")
            passError.innerHTML = "";
        else if (newPass.value != "" && pass != "" && pass == newPass.value) {
            passError.innerHTML = "<i class='fas fa-check'></i> Matched";
            passError.classList = "text-sm font-weight-bold text-success";
        } else if (newPass.value != "" || pass != newPass.value) {
            passError.innerHTML = "<i class='fas fa-times'></i> Wrong";
            passError.classList = "text-sm font-weight-bold text-danger";
        }
    }
</script>
</body>

</html>