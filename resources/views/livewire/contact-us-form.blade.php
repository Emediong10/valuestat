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

            <form class="row mb-0" wire:submit.prevent="save" method="post" enctype="multipart/form-data">
                <div class="form-process"></div>

                <!-- First Name -->
                <div class="col-md-6 col-sm-12 mb-3">
                    <div class="form-group">
                        <label for="firstName">First Name:</label>
                        <input type="text" wire:model="firstname" placeholder="Your first name" class="form-control" id="firstName">
                        @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Last Name -->
                <div class="col-md-6 col-sm-12 mb-3">
                    <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input type="text" wire:model="lastname" placeholder="Your last name" class="form-control" id="lastName">
                        @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Email -->
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" wire:model="email" class="form-control" placeholder="user@company.com" id="email">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" wire:model="phone" class="form-control" placeholder="08123456789" id="phone">
                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Subject -->
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="subject">Message Subject:</label>
                        <input type="text" wire:model="subject" class="form-control" placeholder="Contact Subject" id="subject">
                        @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Comment -->
                <div class="col-12 mb-4">
                    <div class="form-group">
                        <label for="comment">Message:</label>
                        <textarea wire:model="comment" class="form-control" rows="5" placeholder="Please let us know how we can help you..." id="comment"></textarea>
                        @error('comment') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

               
                <div class="col-12">
                    <button type="submit" class="btn w-100 text-white bg-color rounded-3 py-3 fw-semibold text-uppercase mt-2">
                        Contact Us
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
