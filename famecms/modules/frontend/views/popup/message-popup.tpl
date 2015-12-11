 <!-- MESSAGE TEMPLATE -->
  <div id="messages" class="modal-app reveal-modal" data-reveal>
    <div class="modal-app-wrap">

      <a class="close-reveal-modal">&#215;</a>

      <header class="app-header">
        <span class="icon message"></span>
        <h1 class="app-title">Messages</h1>

        <a href="#" class="button primary compose" id="compose-message">Compose</a>
      </header>

      <div class="app-body" id="message-body">
        <ul id="conversation-picker">
          <li id="new-conversation-list" class="hide">
            <a href="" class="conversation active">
              <span class="avatar"><img src="images/defaults/conversation-list-new.png" alt=""></span>
              <span class="name-placeholder">New Message</span>
            </a>
          </li>
          <li>
            <a href="" class="conversation active">
              <span class="avatar"><img src="images/dummy/avatar-40-40-1.jpg" alt=""></span>
              <span class="name">Alicia Keys</span>
              <span class="time">About 11 hour ago</span>
            </a>
          </li>
          <li>
            <a href="" class="conversation">
              <span class="avatar"><img src="images/dummy/avatar-40-40-2.jpg" alt=""></span>
              <span class="name">Keith Urban</span>
              <span class="time">About 12 hour ago</span>
            </a>
          </li>
          <li>
            <a href="" class="conversation">
              <span class="avatar"><img src="images/dummy/avatar-40-40-3.jpg" alt=""></span>
              <span class="name">Jennifer Lopez</span>
              <span class="time">Jan 20, 2014 - 22:00</span>
            </a>
          </li>
          <li>
            <a href="" class="conversation">
              <span class="avatar"><img src="images/dummy/avatar-40-40-4.jpg" alt=""></span>
              <span class="name">Harry Connick Jr.</span>
              <span class="time">Jan 10, 2014 - 05:00</span>
            </a>
          </li>
        </ul>

        <div id="conversation">

          <div class="chat">
            <a href="#" class="avatar"><img src="images/dummy/avatar-30-30-1.jpg" alt=""></a>
            <div class="meta">
              <a href="" class="name">Alicia Keys</a> | <span class="time">September 7, 2014 - 14:00</span>
            </div><!-- .meta -->
            <div class="content">
              <p>Amazing Spider-Man is the cornerstone of the Marvel Universe. Like a sci fi Lone Wolf & Cub, the new Cable series is packed with action, adventure, humor and everything else an X-Men fan could ask for.</p>
            </div><!-- .content -->
          </div><!-- .chat -->

          <div class="chat self">
            <a href="#" class="avatar"><img src="images/dummy/avatar-30-30-2.jpg" alt=""></a>
            <div class="meta">
              <a href="" class="name">Alicia Keys</a> | <span class="time">September 7, 2014 - 14:00</span>
            </div><!-- .meta -->
            <div class="content">
              <p>This is where youll find all the big-time action, major storylines and iconic.</p>
            </div><!-- .content -->
          </div><!-- .chat -->

          <div class="chat">
            <a href="#" class="avatar"><img src="images/dummy/avatar-30-30-1.jpg" alt=""></a>
            <div class="meta">
              <a href="" class="name">Alicia Keys</a> | <span class="time">September 7, 2014 - 14:00</span>
            </div><!-- .meta -->
            <div class="content">
              <p>See the Avengers go up against Ultron, Kang, the Masters of Evil and more over three decades of epic action.</p>
            </div><!-- .content -->
          </div><!-- .chat -->

          <form action="" id="conversation-reply-form">
            <p class="to-wrap">
              <label for="conversation-reply-to">To:</label>
              <span class="input-wrap vokalplus-userpicker-wrap">
                <input type="text" id="conversation-reply-to" class="vokalplus-userpicker">
              </span>
            </p>
            <p class="reply-wrap">
              <input type="text" name="conversation-reply" id="conversation-reply" placeholder="Message">                
            </p>
            <input type="submit" value="Reply" class="primary wider">
          </form>

        </div><!-- #conversation -->
      </div><!-- .app-body#message-body -->        
      
    </div>
  </div><!-- #messages.post -->