   
   
   
   
   <form action=" {{ route('contact.store') }}" method="POST">
    @csrf
                            <div>
                                <input type="text"  name="name" class="form-control" value="{{ old('name') }}"  placeholder="نام و نام خانوادگی" />
                                    <div class="form-text text-danger"> @error('name') {{ $message }}  @enderror </div>
                            </div>
                            <div>
                                <input type="email" name="email" value="{{ old('email') }}"  class="form-control" placeholder="ایمیل" />
                                    <div class="form-text text-danger"> @error('email') {{ $message }}  @enderror </div>
                            </div>
                            <div>
                                <input type="text" name="subject" value="{{ old('subject') }}"  class="form-control" placeholder="موضوع پیام" />
                                    <div class="form-text text-danger"> @error('subject') {{ $message }}  @enderror </div>
                            </div>
                            <div>
                                <textarea rows="10" name="body"   style="height: 100px" class="form-control"placeholder="متن پیام">{{ old('body') }}</textarea>
                                    <div class="form-text text-danger"> @error('body') {{ $message }}  @enderror </div>
                            </div>
                            <div class="btn_box">
                                <button type="submit">
                                    ارسال پیام
                                </button>
                            </div>
                        </form>