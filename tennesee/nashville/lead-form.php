<form method="post" id="leadForm">
  <div class="form" id="step1">
    <div>
      <h5>See How Much Your Case Is Worth in <strong>Minutes</strong></h5>
    </div>
    <div class="fields">
      <div class="steps">
        <div class="input-wrap" v-if="step==1">
          <div class="cols-2">
            <div>
              <input type="number" name="zip_code" placeholder="Zip Code" required>
            </div>
            <div>
              <select name="injury_type" required>
                <option value="" disabled="" hidden="" selected>Select a injury type</option>
                <?php foreach ($services as $opt) : ?>
                  <option value="<?= $opt ?>"><?= $opt ?></option>
                <?php endforeach; ?>
              </select>
            </div>

          </div>
        </div>

        <div class="input-wrap" v-if="step==2">
          <div class="cols-2">
            <div>
              <input type="text" name="name" placeholder="Name" required>
            </div>
            <div>
              <input type="tel" name="phone" placeholder="Phone" required>
            </div>
          </div>
        </div>
        <div class="input-wrap" v-if="step==3">
          <input type="email" name="email" placeholder="Email" required>
          <div class="row">
            <div style="padding-right: 20px;">
              <input type="checkbox" style="zoom:2;position:relative;top:3px" id="agree">
            </div>
            <div>
              <label for="agree">
                <p class="agrement">By submitting your request you are accepting the <br> <a href="privacy.php" target="_blank">privacy policy.</a></p>
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="input-wrap">
        <input @click="goForward" type="button" v-if="step==0 && step !=3" value="Have an Attorney Call Me" />
        <input @click="goForward" type="button" v-if="step!=0 && step !=3" value="Next" />
        <input @click="testSubmit" type="submit" v-if="step==3" value="Get The Call" />
      </div>
    </div>

  </div>
</form>

<script src="https://unpkg.com/vue@3"></script>
<script>
  Vue.createApp({
    data() {
      return {
        step: 0
      }
    },
    methods: {
      onSubmit: function() {

      },
      testSubmit: function() {
        alert('Submited');
      },
      submitForm: function() {
        /*Submit  Form*/
        this.step = 300;

        fetch(mquiz.action, {
          method: "POST",
          body: new FormData(mquiz),
        }).then((res) => {
          if (res.ok) {
            this.step = 200;
          } else {
            this.step = 500;
          }
        });
      },

      ifNextButton: function() {
        return true;
      },

      changeStep: function(step) {
        let validation = true;

        switch (this.step) {
          case 0:
            break;
        }

        if (validation) {
          this.step = step;
        }
      },
      goBack: function(step) {
        this.step = this.step - 1;
      },

      goForward: function() {
        this.changeStep(this.step + 1);
      },
    }
  }).mount('#leadForm')
</script>