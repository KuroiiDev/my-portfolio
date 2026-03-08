@vite(['resources/css/components/project.modal.css', 'resources/js/components/project.modal.js'])

<div id="projectModal" class="modal-overlay" onclick="closeModal(event)">
    <div class="modal-terminal" id="modalTerminal">

        <div class="terminal-bar">
            <div class="terminal-dots">
                <span class="dot dot-red" onclick="closeProjectModal()" style="cursor:pointer" title="Close"></span>
                <span class="dot dot-yellow"></span>
                <span class="dot dot-green"></span>
            </div>
            <span class="terminal-title" id="modalTerminalTitle">~/projects/loading.sh</span>
            <div style="width: 52px"></div>
        </div>

        <div class="terminal-body">

            <div class="terminal-line mb-3">
                <span class="t-prompt">❯</span>
                <span class="t-cmd"> img-open <span id="modalCmdTitle">title</span>.png</span>
            </div>

            <div class="modal-thumb" id="modalThumb">
                <div class="modal-thumb-placeholder" id="modalThumbPlaceholder">⬡</div>
                <img id="modalThumbImg" src="" alt="" style="display:none" />
            </div>

            <div class="modal-info">

                <div class="terminal-line mt-3">
                    <span class="t-prompt">❯</span>
                    <span class="t-cmd"> show <span class="t-muted">--title</span></span>
                </div>
                <div class="terminal-output">
                    <span class="t-lilac" id="modalTitle">—</span>
                </div>

                <div class="terminal-line mt-2">
                    <span class="t-prompt">❯</span>
                    <span class="t-cmd"> show <span class="t-muted">--desc</span></span>
                </div>
                <div class="terminal-output t-muted" id="modalDesc" style="white-space: pre-line; line-height: 1.7">
                    —
                </div>

                <div class="terminal-line mt-2">
                    <span class="t-prompt">❯</span>
                    <span class="t-cmd"> tech <span class="t-muted">--list</span></span>
                </div>
                <div class="terminal-output">
                    <div class="modal-tags" id="modalTags"></div>
                </div>

            </div>

            <div class="terminal-line mt-3">
                <span class="t-prompt">❯</span>
                <span class="t-cmd"> open --links</span>
            </div>
            <div class="terminal-output modal-actions" id="modalActions">

            </div>

            <div class="terminal-line mt-3">
                <span class="t-prompt">❯</span>
                <span class="typed-cursor ml-1"></span>
            </div>

        </div>
    </div>
</div>