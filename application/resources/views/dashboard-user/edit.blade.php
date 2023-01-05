<form action="/dashboard-user/{{$user->id}}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control profil border-0 @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('$user->username', $user->username) }}">
                    @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control profil border-0 @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('$user->email', $user->email) }}">
                    @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control profil border-0 @error('password')is-invalid @enderror" id="password" placaholder="Password" required>
                  </div>
                  <div class="mb-3">
                  <label for="image" class="form-label">Foto Profil</label>
                    <input class="form-control profil border-0" name="oldImage" type="file" id="formFile" value="{{ $user->image }}">
                  </div>
                  <div class="modal-footer border-0">
                    <button type="button" class="btn" id="batal" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn" id="simpan">Save changes</button>
                  </div>
                </form>