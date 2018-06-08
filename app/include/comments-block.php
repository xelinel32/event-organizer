<div class="NewsOther">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="HappyClients">
                    <p>
                        <span>Задоволені клієнти</span><br>
                        <span>Останні відгуки за цей місяць</span>
                    </p>
                </div>
                <div class="CommentEventBlock">
                    <?php 
                    $sql = "SELECT * FROM comments_event WHERE `id` ORDER BY `date` LIMIT 3";  
                    $row = mysqli_query($conn,$sql); 
                    while($result = mysqli_fetch_array($row)){
                    ?>  
                    <div class="CommentEventOne">
                    <p><?php echo $result['text'] ?>
                    <br><b><?php echo $result['author'] ?></b>
                    <br><span>Дата - <?php echo $result['date'] ?></span>
                    </p>
                </div>
            <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>