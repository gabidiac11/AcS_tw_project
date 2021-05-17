
class CheckBoxItem {
    constructor(props) {
        this.key = props.key;
        this.label = props.label;
        this.parentNode = props.parentNode;
        this.active = false;

        this.containerNode = null;
        this.inputNode = null;
        this.idInput = `checkbox-${props.key}`;

        this.unMount = () => {
            this.containerNode && this.containerNode.parentNode.removeChild(this.containerNode);
        }

        this.render = () => {
            this.unMount();
            this.containerNode = stringToHTML(`
                <div class="filter-group-line checkbox-line">
                          <input class="checkbox-line-input" type="checkbox" value="" id="${this.idInput}">
                          <label class="checkbox-line-label" for="${this.idInput}">
                              ${this.label}
                          </label>
                </div>
            `);

            this.parentNode.append(this.containerNode);
            this.inputNode = document.getElementById(this.idInput);
            this.inputNode.checked = Boolean(props.value);
        }

        this.getResult = () => {
            const result = {
                key: this.key,
                label: this.label,
                value: Boolean(props.value)
            };

            if(this.inputNode) {
                result.value = this.inputNode.checked;
            }
            return result;
        }
    }
}
