<div id="sys-name" style="margin-top: 20px;">
    <span style="border-bottom: 3px darkblue solid; font-size: 20px; font-weight: bold;">Article Management</span>
</div>
    <form style="margin-left: 20px; padding-bottom: 20px;" method="post" action="article_submit.php">
        <p>
            <span>Article Title</span>
            <span><input type="text" name="title" maxlength=50 placeholder="title of your article" required id="art-title"></span>
        </p>
        <p>
            <span style="margin-right: 16px;">Category</span>
            <select name="category">
                <option value="学院新闻">学院新闻</option>
                <option value="开发日志">开发日志</option>
                <option value="个人日志">个人日志</option>
                <option value="研究动态">研究动态</option>
            </select>
        </p>
        <textarea id="input-msg" name="message" rows=30 cols="70" placeholder="Something you want to say to me~" autofocus required></textarea>
        <input type="submit" name="submit" value="Submit Article">
    </form>
