
class ConfirmationModal {
    constructor(onConfirm, onCancel, title) {
        this.SELECTORS = {
            MODAL_ROOT: "#modal",
            TITLE: "[modal-title]",
            CONTENT: "[modal-content]",
            CONFIRM_BTN: "[modal-confirm]",
            CANCEL_BTN: "[modal-cancel]",
        }

        this.onConfirm = onConfirm;
        this.onCancel = onCancel;

        this.modalNode = document.querySelector(this.SELECTORS.MODAL_ROOT);
        this.contentNode = this.modalNode.querySelector(this.SELECTORS.CONTENT);

        this.hideModal = () => {
            if (this.modalNode) {
                this.modalNode.setAttribute("show", "false");

                if(this.mapPicker) {
                    this.mapPicker.unMount();
                }

                this.contentNode.innerHTML = "";
            }

            document.body.style.overflow = "";
            document.body.style.height = "";
        }

        this.showModal = () => {
            const titleNode = document.querySelector(this.SELECTORS.TITLE);
            if(titleNode && title) {
                titleNode.innerHTML = title;
            }

            this.modalNode.setAttribute("show", "true");


            document.body.style.overflow = "hidden";
            document.body.style.height = "100vh";
        }

        /** functions for displaying and providing results for the checkbox list content */
        this.checkBoxes = [];
        this.createCheckBoxGroups = (options) => {
            this.contentNode.innerHTML = "";
            this.checkBoxes = options.map(item => {
                return new CheckBoxItem({
                    label: item.label,
                    key: item.key,
                    value: item.value,
                    parentNode: this.contentNode
                });
            });
            this.checkBoxes.forEach(item => {
                item.render();
            })
        }
        this.getCheckBoxResults = () => {
            return this.checkBoxes.map(checkBox => {
                return checkBox.getResult();
            })
        }

        /** functions for displaying and providing results for the MAP content */
        this.mapPicker = null;
        this.createMapLocation = (lat, long) => {
            this.mapPicker = new MapPicker({
                parentNode: this.contentNode,
                lat,
                long
            });
            this.mapPicker.render();
        }

        this.getMapResults = () => {
            if(!this.mapPicker) {
                return {};
            }

            return {
                lat: this.mapPicker.lat,
                lon: this.mapPicker.long
            };
        }

        if (this.modalNode) {
            this.modalNode.querySelector(this.SELECTORS.CONFIRM_BTN).addEventListener("click", (event) => {
                this.onConfirm(this);
                this.hideModal();
            });

            this.modalNode.querySelector(this.SELECTORS.CANCEL_BTN).addEventListener("click", (event) => {
                this.onCancel();
                this.hideModal(this);
            });
        }
    }
}