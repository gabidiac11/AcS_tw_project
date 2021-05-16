
class RangeInput extends CheckBoxItem {
    constructor(props) {
        super(props);

        this.idInput = `range-input-${props.key}`;
        this.min = Number.isSafeInteger(props.min) ? props.min : -100;
        this.max = Number.isSafeInteger(props.max) ? props.max : 100;

        this.unMount = () => {
            this.containerNode && this.containerNode.parentNode.removeChild(this.containerNode);
        }

        this.valueDisplay = () => {
            if(Number.isNaN(props.value) || props.value < props.min) {return "*"; };

            return props.value;
        }

        this.render = () => {
            this.unMount();
            this.containerNode = stringToHTML(`
                <div class="filter-group-line range-group">
                   <label for="${this.idInput}" class="form-label">${this.label}: <span>${this.valueDisplay()}</span></label>
                   <input type="range" class="form-range" min="${this.min}" max="${this.max}" id="${this.idInput}">
                </div>
            `);

            this.parentNode.append(this.containerNode);
            this.inputNode = document.getElementById(this.idInput);
            this.inputNode.nodeValue = props.value;
            this.inputNode.addEventListener("change", (event) => {
                const spanNode = this.inputNode.parentNode.querySelector("label span");
                if(spanNode) {
                    spanNode.innerHTML = this.inputNode.value;
                }
            })
        }

        this.getResult = () => {
            const result = {
                key: this.key,
                label: this.label,
                value: props.value
            };

            if(this.inputNode) {
                result.value = Number(this.inputNode.value) || 0;
            }
            return result;
        }
    }
}
