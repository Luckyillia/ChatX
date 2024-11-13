<p>Witaj na czacie <strong><?php echo htmlspecialchars($user_name); ?></strong> w pokoju <strong><?php echo htmlspecialchars($room_name['pokoj']); ?></strong></p>
<div class="row" style="height: 70vh;">
    <div class="col-md-8"">
        <div class="chat-container p-3" style="height: 100%; overflow-y: scroll;">
            <?php if (empty($messages)) : ?>
                <p>Brak wiadomości</p>
            <?php else : ?>
                <?php foreach ($messages as $msg) : ?>
                    <p><strong><?php echo htmlspecialchars($msg['user']); ?>:</strong> <?php echo htmlspecialchars($msg['message']); ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <form action="index.php?page=index&action=send" method="post" class="d-flex mt-2">
            <input type="text" name="message" class="form-control me-2" placeholder="Wpisz tutaj wiadomość, którą chcesz dodać na czacie" required>
            <button type="submit" class="btn btn-primary">Wyślij</button>
        </form>
        <br>
        <a href="?page=index&action=logOut" class="btn btn-primary">Wyjdz</a>
    </div>
    <div class="col-md-4" style="height: 100%; overflow-y: auto;">
        <div class="users-list p-3" style="height: 100%; overflow-y: scroll;">
            <h5>Zalogowani</h5>
            <?php
            if(isset($users) && count($users) > 0){
                foreach($users as $user){
                    echo '<p>'.htmlspecialchars($user).'</p>';
                }
            } else {
                echo '<p>Brak użytkowników</p>';
            }
            ?>
        </div>
    </div>
</div>
