
<div class="section_page_main">
    @include('admin.partials.error')
    <form  class="form_usser_create" action="" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="margin_page_input file_input">
            <div class="uk-inline file_size">
                <label for="bir_file_title">File Title : </label>
                <span class="uk-form-icon" uk-icon="icon: comment"></span>
                <input type="text" name="bir_file_title" class="input_bir" id="bir_file_title" value="{{old('bir_file_title',isset($fileItem) ? $fileItem->bir_file_title:'')}}">
            </div>
        </div>
        <div class="margin_page_input file_input">
                <label for="bir_file_description">Description File : </label>
                <textarea name="bir_file_description" id="bir_file_description" cols="30" rows="0">{{old('bir_file_description',isset($fileItem) ? $fileItem->bir_file_description:'')}}</textarea>
        </div>
        
        <div class="margin_page_input file_input">

            <label class="form@file__label">
                <input onchange="handleChange(event)" name="fileItem" type="file" multiple class="form@file" id="image-upload" >
                <div class="form@file__label-inner">
                    <div class="svg"></div>
                </div></label>
            <div class="error"></div>
            <div class="results">{{old('bir_file_name',isset($fileItem) ? $fileItem->bir_file_name:'')}}</div>
        </div>

        <script>
            const compose = (...fns) => fns.reduce((f, g) => (...args) => f(g(...args)))

            const validateFileSize = (params) => {
                console.log((params.file.size/1024)/1024)
                if(!params.hasError && (params.file.size/1024)/1024 > 4) {
                    return {
                        ...params,
                        hasError: true,
                        errorMessage: "Maximum file size exceeded. Size limit is 4MB."
                    }
                }
                return params;
            }

            const validateFileType = (params) => {
                let types = ["jpeg", "jpg", "png", "webp", "gif", "bmp"], acceptedTypes = new RegExp(types.join("|"))

                if(!params.hasError && !acceptedTypes.test(params.file.type)) {
                    return {
                        ...params,
                        hasError: true,
                        errorMessage: `Incorrect file type. Please try one of the following: ${types.join(',')}`
                    }
                }
                return params;
            }

            const readFile = (params) => {
                if(!params.hasError)  {
                    let reader = new FileReader();

                    reader.onload = function(e) {
                        var img = new Image();
                        img.src = e.target.result;
                        params.destination.appendChild(img);
                    };
                    reader.readAsDataURL(params.file);
                }
                return params;
            }

            const handleError = (params) => {
                if(params.hasError) {
                    params.errorContainer.innerHTML = params.errorMessage;
                }
                return params;
            }

            function handleChange(e) {
                const errorContainer = document.querySelector('.error'), files = e.target.files, destination = document.querySelector('.results');
                errorContainer.innerHTML = '';
                destination.innerHTML = '';

                console.log(files);
                Object.keys(files).map(i => {
                    // let file = files[i];
                    let params = {
                        file: files[i],
                        hasError: false,
                        errorMessage: '',
                        destination,
                        errorContainer
                    }

                    let validateFile = compose(
                        readFile,
                        handleError,
                        validateFileType,
                        validateFileSize
                    )

                    validateFile(params);
            })
            }

            const imagesSVG = `<div class="img_upload_product"><i class="fas fa-cloud-upload-alt" style="font-size: 48px;"></i><span>
Click here to select file(s)
</span></div>`

            document.querySelector('.svg').innerHTML = imagesSVG;
        </script>
        <div class="btn_send">
            <input type="submit" name="submit" value="Save information">
        </div>
    </form>
</div>
