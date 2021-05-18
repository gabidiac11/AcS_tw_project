
class ConfirmationModal {
    constructor(onConfirm, onCancel, title) {
        this.SELECTORS = {
            MODAL_ROOT: "#modal",
            TITLE: "[modal-title]",
            CONTENT: "[modal-content]",
            CONFIRM_BTN: "[modal-confirm]",
            CANCEL_BTN: "[modal-cancel]",
            simpleContentSelector: `[general-content]`,
            mapContainerSelector: `[map-content]`,
        }

        this.onConfirm = onConfirm;
        this.onCancel = onCancel;

        this.modalNode = document.querySelector(this.SELECTORS.MODAL_ROOT);
        this.contentNode = this.modalNode.querySelector(this.SELECTORS.CONTENT);
        this.simpleContentNode = this.modalNode.querySelector(this.SELECTORS.simpleContentSelector);
        this.mapContainerNode = this.modalNode.querySelector(this.SELECTORS.mapContainerSelector);

        this.hideModal = () => {
            if (this.modalNode) {
                this.modalNode.setAttribute("show", "false");

                /** hide the map, but keep it alive in background */
                this.mapContainerNode.setAttribute("show", "false");
            
                /** hide the general content */
                this.simpleContentNode.innerHTML = "";
                this.simpleContentNode.setAttribute("show", "false");
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
            /** hide the map, but keep it alive in background */
            this.mapContainerNode.setAttribute("show", "false");
        
            /** left to be shown: the general content */
            this.simpleContentNode.innerHTML = "";
            this.simpleContentNode.setAttribute("show", "true");

            this.checkBoxes = options.map(item => {
                return new CheckBoxItem({
                    label: item.label,
                    key: item.key,
                    value: item.value,
                    parentNode: this.simpleContentNode
                });
            });
            this.checkBoxes.forEach(item => {
                item.render();
            });
        }
        this.getCheckBoxResults = () => {
            return this.checkBoxes.map(checkBox => {
                return checkBox.getResult();
            });
        }

        console.log("picker")
        /** functions for displaying and providing results for the MAP content */
        this.mapPicker = new MapPicker({
            parentNode: this.contentNode,
            containerNode: this.mapContainerNode,
            lat: 0,
            long: 0
        });
        
        this.createMapLocation = (lat, long) => {
            this.mapPicker.setCoordonates(lat, long);

            /** left to be shown: the map content */
            this.mapContainerNode.setAttribute("show", "true");

            /** hide the general content */
            this.simpleContentNode.innerHTML = "";
            this.simpleContentNode.setAttribute("show", "false");
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