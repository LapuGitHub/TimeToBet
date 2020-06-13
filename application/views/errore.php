<div class="siimple-modal siimple-modal--medium" id="modal" style="display:none;">
    <div class="siimple-modal-content">
        <div class="siimple-modal-header">
            <div class="siimple-modal-header-title">Errore credenziali</div>
            <div class="siimple-modal-header-close" id="modal-close"></div>
        </div>
        <div class="siimple-modal-body"><p><?= $problem ?></p>
        </div>
    </div>

<script>
        document.getElementById("modal").style.display = "";
            
        document.getElementById("modal-close").addEventListener("click", function () {
            document.getElementById("modal").style.display = "none";
        });
</script>