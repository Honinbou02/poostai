<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/texttospeech/v1/cloud_tts.proto

namespace Google\Cloud\TextToSpeech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The top-level message sent by the client for the `SynthesizeSpeech` method.
 *
 * Generated from protobuf message <code>google.cloud.texttospeech.v1.SynthesizeSpeechRequest</code>
 */
class SynthesizeSpeechRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Synthesizer requires either plain text or SSML as input.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.SynthesisInput input = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $input = null;
    /**
     * Required. The desired voice of the synthesized audio.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.VoiceSelectionParams voice = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $voice = null;
    /**
     * Required. The configuration of the synthesized audio.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.AudioConfig audio_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $audio_config = null;
    /**
     * Advanced voice options.
     *
     * Generated from protobuf field <code>optional .google.cloud.texttospeech.v1.AdvancedVoiceOptions advanced_voice_options = 8;</code>
     */
    protected $advanced_voice_options = null;

    /**
     * @param \Google\Cloud\TextToSpeech\V1\SynthesisInput       $input       Required. The Synthesizer requires either plain text or SSML as input.
     * @param \Google\Cloud\TextToSpeech\V1\VoiceSelectionParams $voice       Required. The desired voice of the synthesized audio.
     * @param \Google\Cloud\TextToSpeech\V1\AudioConfig          $audioConfig Required. The configuration of the synthesized audio.
     *
     * @return \Google\Cloud\TextToSpeech\V1\SynthesizeSpeechRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\TextToSpeech\V1\SynthesisInput $input, \Google\Cloud\TextToSpeech\V1\VoiceSelectionParams $voice, \Google\Cloud\TextToSpeech\V1\AudioConfig $audioConfig): self
    {
        return (new self())
            ->setInput($input)
            ->setVoice($voice)
            ->setAudioConfig($audioConfig);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\TextToSpeech\V1\SynthesisInput $input
     *           Required. The Synthesizer requires either plain text or SSML as input.
     *     @type \Google\Cloud\TextToSpeech\V1\VoiceSelectionParams $voice
     *           Required. The desired voice of the synthesized audio.
     *     @type \Google\Cloud\TextToSpeech\V1\AudioConfig $audio_config
     *           Required. The configuration of the synthesized audio.
     *     @type \Google\Cloud\TextToSpeech\V1\AdvancedVoiceOptions $advanced_voice_options
     *           Advanced voice options.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Texttospeech\V1\CloudTts::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Synthesizer requires either plain text or SSML as input.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.SynthesisInput input = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\TextToSpeech\V1\SynthesisInput|null
     */
    public function getInput()
    {
        return $this->input;
    }

    public function hasInput()
    {
        return isset($this->input);
    }

    public function clearInput()
    {
        unset($this->input);
    }

    /**
     * Required. The Synthesizer requires either plain text or SSML as input.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.SynthesisInput input = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\TextToSpeech\V1\SynthesisInput $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\TextToSpeech\V1\SynthesisInput::class);
        $this->input = $var;

        return $this;
    }

    /**
     * Required. The desired voice of the synthesized audio.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.VoiceSelectionParams voice = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\TextToSpeech\V1\VoiceSelectionParams|null
     */
    public function getVoice()
    {
        return $this->voice;
    }

    public function hasVoice()
    {
        return isset($this->voice);
    }

    public function clearVoice()
    {
        unset($this->voice);
    }

    /**
     * Required. The desired voice of the synthesized audio.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.VoiceSelectionParams voice = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\TextToSpeech\V1\VoiceSelectionParams $var
     * @return $this
     */
    public function setVoice($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\TextToSpeech\V1\VoiceSelectionParams::class);
        $this->voice = $var;

        return $this;
    }

    /**
     * Required. The configuration of the synthesized audio.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.AudioConfig audio_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\TextToSpeech\V1\AudioConfig|null
     */
    public function getAudioConfig()
    {
        return $this->audio_config;
    }

    public function hasAudioConfig()
    {
        return isset($this->audio_config);
    }

    public function clearAudioConfig()
    {
        unset($this->audio_config);
    }

    /**
     * Required. The configuration of the synthesized audio.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.AudioConfig audio_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\TextToSpeech\V1\AudioConfig $var
     * @return $this
     */
    public function setAudioConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\TextToSpeech\V1\AudioConfig::class);
        $this->audio_config = $var;

        return $this;
    }

    /**
     * Advanced voice options.
     *
     * Generated from protobuf field <code>optional .google.cloud.texttospeech.v1.AdvancedVoiceOptions advanced_voice_options = 8;</code>
     * @return \Google\Cloud\TextToSpeech\V1\AdvancedVoiceOptions|null
     */
    public function getAdvancedVoiceOptions()
    {
        return $this->advanced_voice_options;
    }

    public function hasAdvancedVoiceOptions()
    {
        return isset($this->advanced_voice_options);
    }

    public function clearAdvancedVoiceOptions()
    {
        unset($this->advanced_voice_options);
    }

    /**
     * Advanced voice options.
     *
     * Generated from protobuf field <code>optional .google.cloud.texttospeech.v1.AdvancedVoiceOptions advanced_voice_options = 8;</code>
     * @param \Google\Cloud\TextToSpeech\V1\AdvancedVoiceOptions $var
     * @return $this
     */
    public function setAdvancedVoiceOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\TextToSpeech\V1\AdvancedVoiceOptions::class);
        $this->advanced_voice_options = $var;

        return $this;
    }

}

