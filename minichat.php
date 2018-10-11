<div id="chat" style="text-align:center;">
	<form action="index.php" method="post">
		<p style="text-align:center;color:orange;" >Bonjour <?php echo htmlspecialchars($_SESSION['pseudo']); ?> veux-tu chatter avec les autres menmbres ?<p>
		<p>
			<textarea name="message" rows="1" cols="100" placeholder="Votre message ici..."></textarea>
		</p>
		<p>
			<input type="submit" value="Envoyer"/>
		</p>
	</form>
</div>