    <h2 class="mb-4 text-center text-primary ">Registration Form </h2>
    <form wire:submit.prevent="register">
        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <select class="form-select form-select-lg" id="title"  wire:model.live="title">
                <option value="0" disabled>Select Your Title</option>
                @foreach ($titles as $title)
                    <option value="{{ $title->titleID }}">{{ $title->title }}</option>
                @endforeach
            </select>
              @error('title') <span class="small text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Forenames -->
        <div class="mb-3">
            <label for="forenames" class="form-label">Forenames</label>
            <input type="text"   wire:model.live="forenames"    class="form-control form-control-lg" id="forenames" placeholder="ForeName"  />
             @error('forenames') <span class="small text-danger">{{ $message }}</span> @enderror

        </div>

        <!-- Surnames -->
        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text"  wire:model.live="surname"  class="form-control form-control-lg" id="surname" placeholder="Surname"  />
            @error('surname') <span class="small text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Delegate Type -->
        <div class="mb-3">
            <label for="delegateType" class="form-label">Delegate Type</label>
            <select class="form-select form-select-lg" id="delegateType"  wire:model.live="delegate">
                <option value="0" disabled>Select Delegate Type</option>
                @foreach ($delegates as $delegate)
                    <option value="{{ $delegate->delegateTypeID }}">{{ $delegate->delegateType }}</option>
                @endforeach
            </select>
              @error('delegate') <span class="small text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Phone -->
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="tel"   wire:model.live="phone"  class="form-control form-control-lg" id="phone" placeholder="+44 234 567 890"  />
            @error('phone') <span class="small text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email"  wire:model.live="email"  class="form-control form-control-lg" id="email" placeholder="you@example.com" />
             @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Register Button -->
        <button type="submit"  wire:loading.attr="disabled" wire:target="register"  class="btn btn-lg btn-outline-primary w-100">
            Submit 
        </button>
    </form>