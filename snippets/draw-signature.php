<!-- draw-signature main body start from here -->
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
                <!-- all the draw-upload-auto options goes here -->
                <div class="options-grp">
                    <div class="form-group">
                        <button class="btn-contained-toggle btn-after-effect btn-active"><a href="?page=draw-signature">Draw</a></button>
                        <button class="btn-contained-toggle btn-after-effect"><a href="?page=upload-signature">Upload an image</a></button>
                        <button class="btn-contained-toggle"><a href="?page=auto-signature">Auto Generate</a></button>
                    </div>
                    <div class="form-group signature-div">
                        <canvas id="signature-canvas"></canvas>
                        <button type="button" class="btn-cst-cls close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="straight-line border-bottom border-bottom-width"></div>
                        <button id="clear-button">Clear</button>
                    </div>
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
<!-- /draw-signature main body ends from here -->