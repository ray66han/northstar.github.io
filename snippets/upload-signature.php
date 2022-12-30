<!-- upload-signature main body start from here -->
<div class="col-md-7 card-position-cls">
    <div class="card card-style-cls">
        <div class="card-body">
            <h3 class="card-title card-title-style">Add your Signature</h3>
        </div>
        <div class="border-bottom border-bottom-header"></div>
        <form>
            <div class="card-body">
                <!-- enter-your-full name input and label -->
                <div class="form-group">
                    <label for="fullName" class="full-name-txt">Please type your full name*</label>
                    <input type="text" class="form-control" id="fullName" placeholder="(Required)">
                </div>
                <div class="options-grp">
                    <!-- all the draw-upload-auto options goes here -->
                    <div class="form-group">
                        <button class="btn-contained-toggle btn-after-effect"><a href="?page=draw-signature">Draw</a></button>
                        <button class="btn-contained-toggle btn-after-effect"><a href="?page=upload-signature btn-active">Upload an image</a></button>
                        <button class="btn-contained-toggle"><a href="?page=auto-signature">Auto Generate</a></button>
                    </div>
                    <div class="form-group signature-div">
                        <div class="signature-upload">
                            <div class="icon" id="icon">
                                <label for="file-input">
                                    <img class="icon-img" src="assets/images/upload/upload.svg" alt="Upload icon">
                                </label>
                                <label for="file-info" class="icon-file-txt">Drop and drag or <form>
                                        <button type="button" id="browse-button"> Browse </button>
                                        <input type="file" id="file-input" accept="image/jpeg,image/png,image/svg+xml" style="display: none;">
                                    </form>
                                    <script>
                                        const browseButton = document.getElementById('browse-button');
                                        const fileInput = document.getElementById('file-input');
                                        browseButton.addEventListener('click', () => fileInput.click());
                                        fileInput.addEventListener('change', () => {
                                            const file = fileInput.files[0];
                                            const reader = new FileReader();
                                            reader.onload = (event) => {
                                                const image = new Image();
                                                image.src = event.target.result;
                                                image.style.width = '50px';
                                                image.style.height = '30px';
                                                image.align = 'center';
                                                document.getElementById('icon').style.display = 'none';
                                                document.getElementById('uploaded-image').appendChild(image);
                                                document.getElementById('uploaded-image').style.display = 'block';
                                                document.getElementById('clear-button').style.display = 'block';
                                            };
                                            reader.readAsDataURL(file);
                                        });
                                    </script>
                                </label>
                            </div>
                            <div class="txt"></div>
                        </div>
                        <div id="uploaded-image" style="display: none;"></div>
                        <button id="clear-button" style="display: none;">Clear</button>
                        <script>
                            const clearButton = document.getElementById('clear-button');
                            clearButton.addEventListener('click', () => {
                                fileInput.value = '';
                                document.getElementById('uploaded-image').innerHTML = '';
                                document.getElementById('uploaded-image').style.display = 'none';
                                document.getElementById('clear-button').style.display = 'none';
                                document.getElementById('icon').style.display = 'block';
                            });
                        </script>
                    </div>
                    <div class="card-body">
                        <label class="form-check-label form-confirmation" for="exampleCheck1">*Lorem ipsum dolor sit amet, magna aliquam consectetuer adipiscing elit, sed diam dolor sit amet nonummy nibh euismod tinci.</label>
                    </div>
                </div>
                <div class="card-body draw-footer-btn">
                    <button class="cancel-custom-txt" type="button" onclick="cancelAction()">Cancel</button>
                    <button type="submit" class="btn btn-custom-color" id="submit-button" disabled>Confirm and Sign</button>
                </div>
        </form>
    </div>
</div>
<!-- /upload-signature main body ends here -->