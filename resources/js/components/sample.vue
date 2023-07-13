<form @submit.prevent="submitForm">
    <ul class="form-style-1">
        <li>
            <label>Brand <span class="required">*</span></label>
            <input type="text" name="field3" class="field-long" v-model="brand"/>
        </li>
        <li>
            <label>Model <span class="required">*</span></label>
            <input type="text" name="field3" class="field-long" v-model="model"/>
        </li>
        <li>
            <label>Date Purchased <span class="required">*</span></label>
            <input type="text" name="field3" class="field-long" v-model="dop"/>
        </li>
        <li>
            <label>Previous Owner <span class="required">*</span></label>
            <input type="text" name="field3" class="field-long" v-model="po"/>
        </li>
        <li>
            <label>CP Number <span class="required">*</span></label>
            <input type="text" name="field3" class="field-long" v-model="cpnumber"/>
        </li>
        <li>
            <label>Status<span class="required">*</span></label>
            <textarea name="field5" id="field5" class="field-long field-textarea" v-model="status" ></textarea>
        </li>
        <li>
            <label>Ownership</label>
            <select name="field4" class="field-select" v-model="brand">
            <option value="Advertise">Advertise</option>
            <option value="Partnership">Partnership</option>
            <option value="General Question">General</option>
            </select>
        </li>
        <li>
            <input type="submit" value="Submit" />
        </li>
    </ul>
    </form>