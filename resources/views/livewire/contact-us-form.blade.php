<div class="card bg-white shadow-lg border-0">
    <div class="card-body p-5">
        <div class="form-widget" data-loader="button" data-alert-type="inline">


            <div class="form-result"></div>

            @if ($successMsg)
            <div class="alert alert-success">
                {{ $successMsg }}
            </div>
        @elseif (session('error_message'))
            <div class="alert alert-danger">
                {{ session('error_message') }}
            </div>
        @endif

            <form class="row mb-0" wire:submit="save" action="" method="post" enctype="multipart/form-data">
                <div class="form-process"></div>
                 <div class="row">
                        <div class="col-6 form-group mb-4">
                            <label>First Name:</label>
                            <input type="text" wire:model = "firstname" name="landing-enquiry-name" class="form-control form-control-lg required"  placeholder="Your first name">
                            @error('firstname') <span style="color: red;">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-6 form-group mb-4">
                            <label>Last Name:</label>
                            <input type="text" wire:model = "lastname" name="landing-enquiry-name" class="form-control form-control-lg required"  placeholder="Your Last name">
                            @error('lastname') <span style="color: red;">{{ $message }}</span> @enderror
                        </div>
             </div>
                <div class="col-12 form-group mb-4">
                    <label>Email:</label>
                    <input type="email" wire:model="email" class="form-control form-control-lg required" value="" placeholder="user@company.com">
                    @error('email') <span style="color: red;">{{ $message }}</span> @enderror
                </div>
                <div class="col-12 form-group mb-4">
                    <label>Phone:</label><br>
                    <div class="input-group input-group-lg">
                        <input type="text"  wire:model="phone" class="form-control form-control-lg required" value="" placeholder="08123456789">
                        @error('phone') <span style="color: red;">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mb-4 form-group">
                    <label>Message Subject:</label>
                    <input type="text" wire:model="subject" class="form-control" placeholder="Contact Subject">
                    @error('subject') <span style="color: red;">{{ $message }}</span> @enderror
                </div>
                <div class="col-12 form-group mb-4">
                    <label>Message:</label>
                    <textarea wire:model="comment" class="form-control form-control-lg" cols="30" rows="5" placeholder="Please let us know how we can help you..."></textarea>
                    @error('comment') <span style="color: red;">{{ $message }}</span> @enderror
                </div>
                {{-- <div class="col-12 d-none">
                    <input type="text" id="landing-enquiry-botcheck" name="landing-enquiry-botcheck" value="" />
                </div> --}}
                <div class="col-12">
                    <button type="submit" name="landing-enquiry-submit" class="btn w-100 text-white bg-color rounded-3 py-3 fw-semibold text-uppercase mt-2">Contact Us</button>
                </div>

                {{-- <input type="hidden" name="prefix" value="landing-enquiry-"> --}}
            </form>
        </div>
    </div>
</div>
