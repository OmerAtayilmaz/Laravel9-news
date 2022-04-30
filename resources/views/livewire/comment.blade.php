<div>
<form class="commend-form">
<div class="form-group">
                                <label for="title">Title</label>
                                <input name="title" type="text" class="form-control" id="title" rows="3"></input>
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment</label>
                                <textarea class="form-control" id="comment"  name="comment" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                            <label for="rating">Rating</label>
                            <select class="form-control" name="rating" id="rating">
                                <option  value="1">★</option>
                                <option value="2">★★</option>
                                <option value="3" selected>★★★</option>
                                <option value="4">★★★★</option>
                                <option value="5">★★★★★</option>
                            </select>
                            </div>
                            <a class="nav-link bg-warning text-white text-center" href="{{route('home')}}">Comment
                                    <span class="sr-only">(current)</span></a>
        </from>
</div>
